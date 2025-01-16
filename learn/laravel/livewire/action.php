<?php

// intro
/*
 * what is the goal of the action
 * - The goal of actions in Livewire is to be able to easily listen to page
 *   interactions, and call a method on your Livewire component
 *   (re-rendering the component).
 *
 * some common events:
 *  - click   => wire:click
 *  - keydown => wire:keydown
 *  - submit  => wire:submit
 *
 * Note:
 *  - wire:click.prevent
 *    => what is prevented decorator, we make sure that the default
 *       behaviour of button is not triggered
 */


// passing action parameters :
/*
 * how
 *  - wire:click="addTodo({{$para1}}, {{$para2}})"
 *
 * int the method:
 *  - public function addTodo($para1, $para2)
 */


// event modifiers:
/*
 *  
 */