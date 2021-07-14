<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layout.app')

@section('title', 'Homepage')

@section('content')


    <a href="{{ route('comics.index') }}">comics page</a>
    <h1>homepage</h1>
@endsection
