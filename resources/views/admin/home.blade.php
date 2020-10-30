@extends('admin.layouts')

@section('title', 'Home')

<!-- Ini buat logo yang di samping kiri -->
@section('homeIcon', 'active')

@section('content')
<div class="panel panel-default">
  <!-- Judul konten di sini -->
  <div class="panel-heading">Hierapolis Rocks!</div>
  <div class="panel-body">
    <div class="page-header">
      <!-- Ini Header kecil -->
      <h4>System usage</h4>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-success" style="width: 35%"></div>
      <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
      <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
    </div>

    <div class="page-header">
      <!-- Ini header kecil -->
      <h4>User statics</h4>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <input class="knob second" data-bgcolor="#d4ecfd" data-fgcolor="#30a1ec" data-height="140" data-inputcolor="#333" data-thickness=".3" data-width="140" type="text" value="50" />
      </div>
      <div class="col-md-3">
        <input class="knob second" data-bgcolor="#c4e9aa" data-fgcolor="#8ac368" data-height="140" data-inputcolor="#333" data-thickness=".3" data-width="140" type="text" value="75" />
      </div>
      <div class="col-md-3">
        <input class="knob second" data-bgcolor="#cef3f5" data-fgcolor="#5ba0a3" data-height="140" data-inputcolor="#333" data-thickness=".3" data-width="140" type="text" value="35" />
      </div>
      <div class="col-md-3">
        <input class="knob second" data-bgcolor="#f8d2e0" data-fgcolor="#b85e80" data-height="140" data-inputcolor="#333" data-thickness=".3" data-width="140" type="text" value="85" />
      </div>
    </div>
  </div>
</div>
@endsection