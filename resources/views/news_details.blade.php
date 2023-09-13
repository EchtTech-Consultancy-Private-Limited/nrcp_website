@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('News Details') }}
@endsection
@section('content')

<div id="rs-about" class="rs-about style1 pt-80 pb-40 md-pt-70 md-pb-70">
<div class="container">
   <div class="row">
      <div class="col-lg">
         <div class="tab-content">
            <!-- Content and Images -->
            <div class="heading-title mb-0">
               <h2 class="title"> News Details</h2>
            </div>
            <!-- Table section -->
            <section>
               <div class="heading-title table-heading">
                  <a href="javascript:vopid();" class="readon orange-btn" tabindex="0"> Archive </a>
               </div>
              
               <div class="table-responsive">
                                    <table class="example">
                                        <thead>
                                            <th>Sr.no.</th>
                                            <th>Title</th>
                                            <th>News</th>                                        
            
                                        </thead>
                                        <tbody>
                                                   
            <tr>
                <td>1</td>
                <td>News1</td>
                <td><a href="#">News 1</a>, <a href="#">News 2</a>  </td>
            </tr>            

            <tr>
                <td>2</td>
                <td>News1</td>
                <td><a href="#">News 1</a>, <a href="#">News 2</a>  </td>
            </tr>   

            <tr>
                <td>3</td>
                <td>News1</td>
                <td><a href="#">News 1</a>, <a href="#">News 2</a>  </td>
            </tr>   

            <tr>
                <td>4</td>
                <td>News1</td>
                <td><a href="#">News 1</a>, <a href="#">News 2</a>  </td>
            </tr>   

            <tr>
                <td>5</td>
                <td>News1</td>
                <td><a href="#">News 1</a>, <a href="#">News 2</a>  </td>
            </tr>   
                                        </tbody>
                                    </table>
                                </div>

            </section>
         </div>
      </div>
   </div>
</div>

@endsection
@push('post-scripts')
@endpush


