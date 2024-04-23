@extends('layouts.main')


<div>
    <h1 class="text-4xl">Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-block">Logout</button>
    </form>

</div>
