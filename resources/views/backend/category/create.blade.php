@extends('layouts.master_backend')
@section('conten')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Product</h5>
                                <form method="POST" action="{{ url('admin/category/insert') }}">
                                @csrf
                                <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <a href="" class="btn btn-primary mt-3">บันทึก</a>
                                    <a href="{{ route ('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                 </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection