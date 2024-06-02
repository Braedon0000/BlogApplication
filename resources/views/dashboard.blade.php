
 @extends('layout.layout')

 @section('content')
     <div class="row">
         <div class="col-3">
             @include('shared.left-sidebar')
         </div>
         <div class="col-6">
             @include('shared.success')
             @include('shared.submit_idea')
             <hr>

             @forelse ($ideas as $idea)
                 <div class="mt-3">
                     @include('shared.idea_card')
                 </div>
                 @empty
                 <p class="text-center mt-4">No Results found</p>
             @endforelse


             <div class="mt-3">
                 {{ $ideas->withQueryString()->links() }}
             </div>
         </div>
         <div class="col-3">
             @include('shared.search-bar')
             @include('shared.follow-box')
         </div>
     </div>
 @endsection
