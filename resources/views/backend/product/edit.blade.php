@extends('layouts.master_backend')
@section('conten')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">edit</h5>
                                <form method="POST" action="{{ url('admin/product/update/'.$pro->product_id) }}">
                                @csrf
                                <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{ $pro->name }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      value="{{ $pro->price }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                      <input
                                      type="text"
                                      name="description"
                                      value="{{ $pro->description }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                      <option selected>กรุณาเลือกประเภทสินค้า</option>
                                      <option value="1">ก๋วยเตี๋ยว</option>
                                      <option value="2">ข้าวมันไก่</option>
                                    </select>

                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input name="image" value="{{ $pro->image}}" type="file" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>

                                      <div class="mt-4">
                                        <img src="{{ asset('backend/product/resize'.$pro->image)}}" alt="">
                                      </div>

                                      <input type="submit" value="อัพเดต" class="btn btn-primary mt-3">
                                    <a href="{{ route ('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อน</a>
                                  </div>
                                 </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection
