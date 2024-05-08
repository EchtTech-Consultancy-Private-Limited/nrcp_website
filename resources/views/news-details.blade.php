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
                        <th>Sr.No.</th>
                        <th>News Title</th>
                        <th> Date</th>
                     </thead>
                     <tbody>
                        <?php $i=1; ?>
                        @foreach($newsList as $newsLists)
                        <tr>
                           <td class="text-center">{{ $i++ }}</td>
                           <td>
                           @if($newsLists->tab_type == '1')
                                <a href="{{ $newsLists->public_url  }}" target="_blank" onclick="return confirm('This link will take you to an external web site.')">{{ $newsLists->title_name_en  }}</a>
                            @else
                                <a href="{{ $newsLists->public_url  }}" >{{ $newsLists->title_name_en  }}</a>
                            @endif
                            </td>
                            <td>{{ date("d M Y", strtotime($newsLists->start_date)) }}</td>
                        </tr>
                        @endforeach
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


