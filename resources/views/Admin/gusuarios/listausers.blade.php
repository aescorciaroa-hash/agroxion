@extends('layouts.sidebardadmin')

@section('tituloPagina', 'Listados de Usuario')

@section('content')


<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mt-4">
    <div class="px-6 py-4 border-b border-slate-200 bg-emerald-50/50 flex items-center justify-between">
        <h3 class="font-heading font-bold text-slate-800 text-lg flex items-center gap-2">
            <i class="fas fa-users text-emerald-500"></i> Listado de Usuarios
        </h3>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table id="usuariosTable" class="w-full text-sm text-left text-slate-600 border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                        <th class="px-4 py-3 rounded-tl-lg">ID</th>
                        <th class="px-4 py-3">Usuario</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Rol</th>
                        <th class="px-4 py-3 text-center">Estado</th>
                        <th class="px-4 py-3 text-center">Editar</th>
                        <th class="px-4 py-3 text-center rounded-tr-lg">Eliminar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                   @foreach ($usuarios as $usuario)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-4 py-3 font-semibold text-slate-800">{{ $usuario->id }}</td>
                            <td class="px-4 py-3 font-medium text-slate-700">{{ $usuario->name }}</td>
                            <td class="px-4 py-3">{{ $usuario->email }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center justify-center px-2.5 py-1 text-xs font-semibold rounded-full bg-slate-100 text-slate-700 border border-slate-200">
                                    {{ $usuario->role?->nombre ?? 'Sin Rol' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-center">
                                @if($usuario->estado == 'activo')
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">
                                        Activo
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-rose-100 text-rose-700">
                                        Inactivo
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-center">
                                <button type="button" 
                                    class="editbtn inline-flex items-center justify-center w-8 h-8 rounded-lg bg-amber-100 text-amber-600 hover:bg-amber-200 hover:text-amber-700 transition-colors"
                                    data-id="{{ $usuario->id }}"
                                    data-name="{{ $usuario->name }}"
                                    data-email="{{ $usuario->email }}"
                                    data-role="{{ $usuario->role_id }}"
                                    data-estado="{{ $usuario->estado }}">
                                    <i class="fa-solid fa-pen text-xs"></i>
                                </button>
                            </td>
                            <td class="px-4 py-3 text-center">                     
                                <button type="button" 
                                    class="deletebtn inline-flex items-center justify-center w-8 h-8 rounded-lg bg-rose-100 text-rose-600 hover:bg-rose-200 hover:text-rose-700 transition-colors" 
                                    data-id="{{ $usuario->id }}">
                                    <i class="fa-solid fa-trash-can text-xs"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- AQUI INICIA MODAL DE EDITAR -->


        <!-- AQUI TERMINA MODAL DE EDITAR -->

    </div>
</div>


@endsection