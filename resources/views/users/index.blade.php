@extends('layouts.dashboard')

@section('title')
   {{ trans('users.title.index') }}
@endsection

@section('breadcrumbs')
   {{ Breadcrumbs::render('users') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
             <div class="row">
                <div class="col-md-6">
                   {{-- search --}}
                   <form action="" method="GET">
                      <div class="input-group">
                         <input name="keyword" value="{{ request()->get('keyword') }}" type="search" class="form-control" placeholder="">
                         <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                               <i class="fas fa-search"></i>
                            </button>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-6">
                   {{-- create user --}}
                   @can('user_create')
                     <a href="{{ route('users.create') }}" class="btn btn-primary float-right" role="button">
                        {{ trans('users.button.create.value') }}
                        <i class="fas fa-plus-square"></i>
                     </a>
                   @endcan
                   
                </div>
             </div>
          </div>
          <div class="card-body">
             <div class="row">
                <!-- list users -->
                @forelse ($users as $user)
                <div class="col-md-4">
                    <div class="card my-1">
                       <div class="card-body">
                          <div class="row">
                             <div class="col-md-2">
                                <i class="fas fa-id-badge fa-5x"></i>
                             </div>
                             <div class="col-md-10">
                                <table>
                                   <tr>
                                      <th>
                                         {{ trans('users.label.name') }}
                                      </th>
                                      <td>:</td>
                                      <td>
                                         <!-- show user name -->
                                         {{ $user->name }}
                                      </td>
                                   </tr>
                                   <tr>
                                      <th>
                                        {{ trans('users.label.email') }}
                                      </th>
                                      <td>:</td>
                                      <td>
                                         <!-- show user email -->
                                         {{ $user->email }}
                                      </td>
                                   </tr>
                                   <tr>
                                      <th>
                                        {{ trans('users.label.role') }}
                                      </th>
                                      <td>:</td>
                                      <td>
                                         <!-- Show user roles -->
                                         {{ $user->roles->first()->name }}
                                      </td>
                                   </tr>
                                </table>
                             </div>
                          </div>
                          <div class="float-right">
                             <!-- edit -->
                             @can('user_update')
                              <a href="{{ route('users.edit',['user'=>$user]) }}" class="btn btn-sm btn-info" role="button">
                                 <i class="fas fa-edit"></i>
                              </a>
                             @endcan
                             
                             <!-- delete -->
                             @can('user_delete')
                              <form class="d-inline" action="{{ route('users.destroy',['user'=>$user]) }}" role="alert" 
                                 alert-text="{{ trans('users.alert.delete.message.confirm', ['name' => $user->name]) }}" 
                                 method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                 </button>
                              </form>
                             @endcan
                          </div>
                       </div>
                    </div>
                 </div>
                @empty
                    <strong>
                     @if (request()->get('keyword'))
                        {{ trans('users.label.no_data.search', ['keyword' => request()->get('keyword')]) }}
                     @else
                        {{ trans('users.label.no_data.fetch') }}
                     @endif
                    </strong>
                @endforelse 
             </div>
          </div>
          @if ($users->hasPages())
          <div class="card-footer">
              {{ $users->links('vendor.pagination.bootstrap-4') }}
          </div>
      @endif
       </div>
    </div>
 </div>
@endsection

@push('javascript-internal')
    <script>
        $(document).ready(function() {

            // Event: delete tag
            $("form[role='alert']").submit(function(event){
                event.preventDefault();
                Swal.fire({
                    title: "{{ trans('users.alert.delete.title') }}",
                    text: $(this).attr('alert-text'),
                    icon: 'warning',
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: "{{ trans('users.button.cancel.value') }}",
                    reverseButtons: true,
                    confirmButtonText: "{{ trans('users.button.delete.value') }}",
                }).then((result) => {
                if (result.isConfirmed) {
                   event.target.submit();
                }
                });

            });
        });
    </script>
@endpush