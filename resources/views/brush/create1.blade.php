@extends('layout')
   @section('content')
   <div class="container">
            <form action="{!! route('store') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div id="acct-password-row" class="span7">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Mã Nhân Viên</label>
                            <div class="controls">
                                <input id="current-pass-control" name="txtMa" class="span4" type="text" value="{!! old('txtMa') !!}">
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                            </div>
                        </div>
                        
                        <div class="control-group ">
                            <label class="control-label">Tên Nhân Viên</label>
                            <div class="controls">
                                <input id="new-pass-control" name="txtTen" class="span4" type="text" value="{!! old('txtTen') !!}">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Giới Tính</label>
                            <div class="controls">
                                <input id="" name="txtgioitinh" class="span4" type="text" value="{!! old('txtDiachi') !!}">
                                <div>
                                    {!! $errors->first('txtDiachi') !!}
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Phòng Ban</label>
                            <div class="controls">
                                <input id="new-pass-control" name="txtpb" class="span4" type="text" value="{!! old('txtSDT') !!}">
                                <div>
                                    {!! $errors->first('txtSDT') !!}
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Nơi Sinh</label>
                            <div class="controls">
                                <input id="new-pass-control" name="txtns" class="span4" type="text" value="{!! old('txtSDT') !!}">
                                <div>
                                    {!! $errors->first('txtSDT') !!}
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    </div>
               
                </div>
                <footer id="submit-actions" class="form-actions">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu&nbsp&nbsp</button>
                    <a href="{!! URL::route('index') !!}" class="btn"><i class="icon-remove"></i>&nbsp&nbspHủy&nbsp&nbsp</a>
                </footer>
            </div>
            </form>
        </div>
  
   

@endsection

