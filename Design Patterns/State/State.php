<?php

final class State {

    public static State $Idle;
    public static State $HasOneDollar;
    public static State $OutOfStock;
}

State::$Idle = new State();
State::$HasOneDollar = new State();
State::$OutOfStock= new State();