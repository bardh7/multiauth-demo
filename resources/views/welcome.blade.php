@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mulatiauth Demo</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="card">
                                       <div class="card-body">
                                           <h5 class="card-title">Web User</h5>
                                           <p class="card-text">Click the button below to visit the Web User Dashboard.</p>
                                           <a href="/home" class="btn btn-primary">Web User Dashboard</a>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <div class="card">
                                       <div class="card-body">
                                           <h5 class="card-title">Admin User</h5>
                                           <p class="card-text">Click the button below to visit the Admin User Dashboard.</p>
                                           <a href="/admin/dashboard" class="btn btn-primary">Web User Dashboard</a>
                                       </div>
                                   </div>
                               </div>

                           </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
