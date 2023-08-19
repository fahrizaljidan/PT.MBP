@extends('templates.dashboard')
@section('custom-head')
<link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/izitoast/css/iziToast.min.css')}}"> 
@endsection
@section('page-name','Home')
    
@section('page-body')
<div class="row" bis_skin_checked="1">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12" bis_skin_checked="1">
    <div class="card card-statistic-1" bis_skin_checked="1">
      <div class="card-icon bg-primary" bis_skin_checked="1">
        <i class="fas fa-users"></i>
      </div>
      <div class="card-wrap" bis_skin_checked="1">
        <div class="card-header" bis_skin_checked="1">
          <h4>Users</h4> 
        </div>
        <div class="card-body" bis_skin_checked="1">
          {{$countUsers}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12" bis_skin_checked="1">
    <div class="card card-statistic-1" bis_skin_checked="1">
      <div class="card-icon bg-success" bis_skin_checked="1">
        <i class="fas fa-user-check"></i>
      </div>
      <div class="card-wrap" bis_skin_checked="1">
        <div class="card-header" bis_skin_checked="1">
          <h4>Hadir</h4>
        </div>
        <div class="card-body" bis_skin_checked="1">
          47
        </div>
      </div>
    </div>
  </div>  
  <div class="col-lg-3 col-md-6 col-sm-6 col-12" bis_skin_checked="1">
    <div class="card card-statistic-1" bis_skin_checked="1">
      <div class="card-icon bg-danger" bis_skin_checked="1">
        <i class="fas fa-user-alt-slash"></i>
      </div>
      <div class="card-wrap" bis_skin_checked="1">
        <div class="card-header" bis_skin_checked="1">
          <h4>Tidak Hadir</h4>
        </div>
        <div class="card-body" bis_skin_checked="1">
          42
        </div>
      </div>
    </div>
  </div>
                  
</div>

<div class="card" bis_skin_checked="1">
  <div class="card-header" bis_skin_checked="1">
    <h4>Kebijakan</h4>
    <div class="card-header-action" bis_skin_checked="1">
      @if (Auth::user()->role != 'cleaner')
        @if (count($regulations)==0)
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kebijakan</button>  
        @else
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Kebijakan</button>
        @endif
      @endif
    </div>
  </div>
  <div class="card-body" bis_skin_checked="1">
    @if (count($regulations)==0)
      <div class="empty-state" data-height="400" style="height: 400px;" bis_skin_checked="1">
        <div class="empty-state-icon" bis_skin_checked="1">
          <i class="fas fa-exclamation"></i>
        </div>
        <h2>Kebijakan Kosong</h2>
        <p class="lead">
          Jika anda adalah admin silahkan untuk membuat kebijakan agar tidak kosong.
        </p>
      </div>
    @else
      @foreach ($regulations as $regulation)
        {!!$regulation->konten!!}
      @endforeach    
    @endif
  </div>
</div>

@endsection
@section('custom-js')
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        @if (count($regulations)==0)
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kebijakan</h5>
        @else
        <h5 class="modal-title" id="exampleModalLabel">Edit Kebijakan</h5>
        @endif
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('home.post')}}">
        
        @csrf
        <div class="modal-body">
          <textarea class="summernote" name='konten'>{!! empty($regulasi->konten) ? null : $regulasi->konten !!}</textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
<script> 
$('.summernote').summernote({
  placeholder: 'Tulis Kebijakan...',
  tabsize: 2,
  height: 300,
  toolbar: [
        ['para', ['ol']],
      ]
});
</script>
@if (session('status'))
<script>
  iziToast.show({
      title   : 'Pesan',
      message : '{{session('status')}}',
      position: 'topRight',
      color   : 'green',
      timeout : 3000,
  });
</script>
@endif

@endsection

