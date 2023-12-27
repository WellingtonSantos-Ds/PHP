<?php

interface MtematicaBasica
{
  public function conta($x,$y);
}

class Basic1 implements MtematicaBasica
{

  public function conta($x,$y)
  {
    return $x + $y;
  }
}

class Basic2 implements MtematicaBasica
{
  public function conta($x,$y)
  {
    return $x - $y;
  }
}


class Basic3
{
  public function conta($x,$y)
  {
     return $x - $y;
  }
}


class Matematica
{
  private $basicos;
//Estou falando que minha instacia a variavel ($b) obrigatoriamente vai ter que ter implementado (MatematicaBasica) coisa que a classe Basic3 não tem implementado;

  public function __construct(MtematicaBasica $b)
  {
    $this-> basicos = $b;
  }

  public function addAba($x,$y)
  {
    return $this-> basicos-> conta($x,$y);
  }

}

$mt = new Matematica(new Basic1);
echo $mt ->addAba(3,6);

