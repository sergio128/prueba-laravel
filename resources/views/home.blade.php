@extends('layouts.app')

@section('content')

<template>
  <v-container class="grey lighten-5 mb-6" >
    <v-row  no-gutters style="height: 150px;" >
      <v-col>
        <v-card elevation="2">
          <v-card-title>Lista de trabajadores</v-card-title>
              <v-row>
                <v-col style="margin: 10px;">
                  <v-btn  color="primary" @click="NuevoDato()"> Agregar </v-btn>
                </v-col>
              </v-row>
              <v-row>
                <v-col>
                  <v-simple-table>
                    <template v-slot:default>
                      <thead>
                        <tr>
                          <th class="text-left">
                            #
                          </th>
                          <th class="text-left">
                            Nombre
                          </th>
                          <th class="text-left">
                            Posición
                          </th>
                          <th class="text-left">
                            Salario
                          </th>
                          <th class="text-center">
                            Acciones
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="dato in datos">
                          <th scope="row">@{{ dato.id}}</th>
                          <td>@{{ dato.nombre}}</td>
                          <td>@{{ dato.posicion}}</td>
                          <td>@{{ dato.salario}}</td>
                          <td class="text-center">
                            <v-btn
                              class="mx-2"
                              fab
                              dark
                              small
                              color="green"
                              @click="EditarDato(dato)"
                            >
                              <v-icon dark>
                                mdi-pencil
                              </v-icon>
                            </v-btn>
                            <v-btn
                              class="mx-2"
                              fab
                              dark
                              small
                              color="red"
                              @click="EliminarDato(dato)"
                            >
                              <v-icon dark>
                                mdi-delete
                              </v-icon>
                            </v-btn>
                          </td>
                        </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
                </v-col>
              </v-row>
        </v-card>
      </v-col>
    </v-row>

  </v-container>
</template>


@endsection
