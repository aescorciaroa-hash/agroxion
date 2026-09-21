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
         <div id="editarModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-slate-900/50 backdrop-blur-sm modal-close" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <form id="formEditar" action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="px-6 py-4 border-b border-slate-200 bg-amber-50/50 flex items-center justify-between">
                            <h3 class="font-heading font-bold text-slate-800 text-lg flex items-center gap-2" id="modal-title">
                                <i class="fas fa-user-edit text-amber-500"></i> Editar Usuario
                            </h3>
                            <button type="button" class="text-slate-400 hover:text-slate-600 transition-colors modal-close">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 gap-5">
                                <div>
                                    <label for="edit-name" class="block text-sm font-semibold text-slate-700 mb-2">Usuario</label>
                                    <input type="text" class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm focus:border-amber-500 focus:ring-amber-500 outline-none transition-all" id="edit-name" name="name" required>
                                </div>  
                                <div>
                                    <label for="edit-email" class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                                    <input type="email" class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm focus:border-amber-500 focus:ring-amber-500 outline-none transition-all" id="edit-email" name="email" required>
                                </div>
                                <div>
                                    <label for="edit-role" class="block text-sm font-semibold text-slate-700 mb-2">Rol</label>
                                    <select class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm focus:border-amber-500 focus:ring-amber-500 outline-none transition-all" id="edit-role" name="role_id" required>
                                        <option value="">Seleccionar</option>
                                        @isset($roles)
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ ucfirst($role->nombre) }}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div>
                                    <label for="edit-estado" class="block text-sm font-semibold text-slate-700 mb-2">Estado</label>
                                    <select class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-sm focus:border-amber-500 focus:ring-amber-500 outline-none transition-all" id="edit-estado" name="estado" required>
                                        <option value="">Seleccionar</option>
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-slate-50 border-t border-slate-200 flex justify-end gap-3">
                            <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl transition-colors modal-close">Cancelar</button>
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-amber-500 hover:bg-amber-600 rounded-xl transition-colors">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AQUI TERMINA MODAL DE EDITAR -->

<!-- AQUI INICIA EL MODAL DE BORRAR -->
<div id="eliminarModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-slate-900/50 backdrop-blur-sm modal-close-delete" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
                    <form id="formEliminar" action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="px-6 py-4 border-b border-slate-200 bg-rose-50/50 flex items-center justify-between">
                            <h3 class="font-heading font-bold text-slate-800 text-lg flex items-center gap-2">
                                <i class="fas fa-exclamation-triangle text-rose-500"></i> Confirmar Eliminación
                            </h3>
                            <button type="button" class="text-slate-400 hover:text-slate-600 transition-colors modal-close-delete">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                        <div class="p-6">
                            <p class="text-slate-600 text-sm">¿Está seguro de que desea eliminar este Usuario? Esta acción no se puede deshacer.</p>
                        </div>
                        <div class="px-6 py-4 bg-slate-50 border-t border-slate-200 flex justify-end gap-3">
                            <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl transition-colors modal-close-delete">Cancelar</button>
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-rose-500 hover:bg-rose-600 rounded-xl transition-colors">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!-- AQUI TERMINA EL MODAL DE BORRAR -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const modalEliminar = document.getElementById('eliminarModal');

    // Abrir modal con botón eliminar
    document.querySelectorAll('.deletebtn').forEach(function (btn) {
        btn.addEventListener('click', function () {

            const id = this.dataset.id;
            const form = document.getElementById('formEliminar');

            form.action = '/admin/usuarios/' + id;

            modalEliminar.classList.remove('hidden');
        });
    });

    // Cerrar modal
    document.querySelectorAll('.modal-close-delete').forEach(function (el) {
        el.addEventListener('click', function () {
            modalEliminar.classList.add('hidden');
        });
    });

    // Cerrar con tecla Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            modalEliminar.classList.add('hidden');
        }
    });
});
</script>

         <script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('editarModal');

    // Abrir modal al click en botón editar
    document.querySelectorAll('.editbtn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const id      = this.dataset.id;
            const name    = this.dataset.name;
            const email   = this.dataset.email;
            const role    = this.dataset.role;
            const estado  = this.dataset.estado;

            // Rellenar campos
            document.getElementById('edit-name').value  = name;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-estado').value = estado;

            const roleSelect = document.getElementById('edit-role');
            if (roleSelect) roleSelect.value = role || '';

            // Actualizar action del formulario
            document.getElementById('formEditar').action = '/admin/usuarios/' + id;

            // Mostrar modal
            modal.classList.remove('hidden');
        });
    });

    // Cerrar modal con cualquier elemento .modal-close
    document.querySelectorAll('.modal-close').forEach(function (el) {
        el.addEventListener('click', function () {
            modal.classList.add('hidden');
        });
    });

    // Cerrar modal con tecla Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            modal.classList.add('hidden');
        }
    });

});
</script>


@endsection