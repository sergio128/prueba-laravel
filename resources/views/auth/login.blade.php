@extends('layouts.app')

@section('content')
<template>
  <v-container class="grey lighten-5 mb-6" >
    <v-row  no-gutters style="height: 150px;" >
      <v-col>
        <v-card elevation="2">
          <v-card-title>Ingresar</v-card-title>

          <v-form lazy-validation action="{{ route('login') }}" method="POST">
            @csrf
            <v-row>
              <v-col md="6" offset-md="3">
                <v-row>
                  <v-text-field name="email"  label="Correo" required></v-text-field>
                </v-row>
                <v-row>
                  <v-text-field name="password" label="Contraseña" type="password" required></v-text-field>
                </v-row>
              
                <v-row>
                  <v-checkbox type="checkbox" name="remember" id="remember" label="Recuerdame" required ></v-checkbox>
                </v-row>
                <v-row>
                  <v-btn  color="primary" type="submit" > Ingresar </v-btn>
                </v-row>
                <br>
              </v-col>
            </v-row>
          </v-form>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

         



@endsection
