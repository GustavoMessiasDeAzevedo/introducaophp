
 <?php

   abstract class Conta
   {
      private $tipoDeConta;
      private $agencia;
      private $conta;
      private $saldo;

      private array $movimentacao = [];

      public function __construct($tipoDeConta, $agencia, $conta)
      {
         $this->tipoDeConta = $tipoDeConta;
         $this->agencia = $agencia;
         $this->conta = $conta;
      }

      public function imprimeExtrato()
      {
         echo 'Conta: ' . $this->tipoDeConta . ' Agência: ' . $this->agencia . ' Conta: ' . $this->conta . ' Saldo: ' . $this->calculaSaldo();

         foreach ($this->movimentacao as $itemExtrato) {
            echo '<br>' . $itemExtrato->imprimeItem();
         }
      }

      public function deposito(float $valor)
      {
         $this->saldo = $this->saldo + $valor;
         $this->incluiMovimentacao(new ItemExtrato("Depósito", $valor));
      }

      public function saque(float $valor)
      {
         $this->saldo -= $valor;
         $this->incluiMovimentacao(new ItemExtrato("Saque", $valor));
      }

      public function saldo()
      {
         return $this->saldo;
      }

      public function incluiMovimentacao(ItemExtrato $item)
      {
         $this->movimentacao[] = $item;
      }

      public function getAgencia()
      {
         return $this->agencia;
      }

      public function getTipoDeConta()
      {
         return $this->tipoDeConta;
      }

      public function getConta()
      {
         return $this->conta;
      }

      abstract public function calculaSaldo();
   }

   ?>