@extends('layout.main')
<link rel="stylesheet" href="{{ ('calculator.css') }}">


@section('content')
<script src="{{ asset('resources/js/calculator.js') }}"></script>
<div class="calculator">
    <input type="text" id="result" disabled>
    <button onclick="clearResult()">C</button>
    <button onclick="calculate('/')">÷</button>
    <button onclick="addInput('7')">7</button>
    <button onclick="addInput('8')">8</button>
    <button onclick="addInput('9')">9</button>
    <button onclick="calculate('*')">x</button>
    <button onclick="addInput('4')">4</button>
    <button onclick="addInput('5')">5</button>
    <button onclick="addInput('6')">6</button>
    <button onclick="calculate('-')">-</button>
    <button onclick="addInput('1')">1</button>
    <button onclick="addInput('2')">2</button>
    <button onclick="addInput('3')">3</button>
    <button onclick="calculate('+')">+</button>
    <button onclick="addInput('0')">0</button>
    <button onclick="addInput('.')">.</button>
    <button onclick="calculate('=')">=</button>
  </div>



@endsection


