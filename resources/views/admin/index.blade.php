 @extends('admin.layouts.layout')
 @section('title', __('Home'))
 @section('content')
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner">
                             <h3>150</h3>

                             <p>{{ __('Categories') }}</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-filing"></i>
                         </div>
                         <a href="#" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner">
                             <h3>53<sup style="font-size: 20px">%</sup></h3>

                             <p>{{ ('Tags') }}</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-pound"></i>
                         </div>
                         <a href="#" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3>44</h3>

                             <p>{{ __('Posts') }}</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-compose"></i>
                         </div>
                         <a href="#" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3>65</h3>

                             <p>{{ __('Users') }}</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person"></i>
                         </div>
                         <a href="#" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </section>

     <x-form.form>
         <x-form.input/>
     </x-form.form>
     <!-- /.content -->
 @endsection
