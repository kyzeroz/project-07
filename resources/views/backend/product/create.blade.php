@extends('layouts.master_backend')
@section('conten')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Product</h5>
                                <form method="POST" action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data">
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

                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Category</label>
                                    <select name="category_id" class= "form-select" id= "exampleformCntrolSelect1" aria-label="Default select example">
                                     <option selected>กรุณาเลือกประเภทสินค้า</option>
                                      <option value="1">โทรศัพท์มือถือ</option>
                                      <option value="2">โน๊ตบุ๊ค</option>
                                      <option value="3">คอมพิวเตอร์ตั้งโต๊ะ</option>
                                    </select>


                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>

                                    <div class="mt-3">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    <input type="submit" value="บันทึก" class="btn btn-primary mt-3" บันทึก>
                                    <a href="{{ route ('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                 </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection
