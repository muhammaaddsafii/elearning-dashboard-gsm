@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sekolah indonesia GSM</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        NPSN
                      </th>
                      <th class="text-center">
                        Nama Sekolah
                      </th>
                      <th class="text-center">
                        Label GSM
                      </th>
                      <th class="text-center">
                        Provinsi
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($indonesias as $indonesia)
                    <tr>
                      <td class="text-wrap">
                        {{$indonesia->npsn}}
                      </td>
                      <td class="text-wrap text-center">
                        {{$indonesia->nama}}
                      </td>
                      <td class="text-wrap text-center">
                        Sekolah {{$indonesia->label->name}}
                      </td>
                      <td class="text-wrap">
                        {{$indonesia->provinsi}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a href="/sekolah/indonesia/{{$indonesia->slug}}" type="button" class="btn btn-theme btn-sm">Detail</a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="mt-4 d-flex justify-content-center">
                {{ $indonesias->links() }}
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
