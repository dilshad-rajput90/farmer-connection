@extends('layouts/front/master')

@section('content')

             {{-- {{ dd($data) }} --}}

            {{-- {{ dd($profession) }} --}}

            {{-- {{ dd($expertise) }} --}}
                {{-- expertise --}}

		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register Here</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">

					{{-- <form class="form-horizontal" method="post" action="#"> --}}

                       {!! Form::open(['url'=>'/register_process','method'=>'post','files'=>true]) !!}

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                    {{-- @error('message') --}}
                                </div>
                                @error('name')
                                 <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                                    </div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
                               @error('email')
                                 <p class="alert alert-danger">{{ $message }}</p>
                                @enderror

                            </div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                                @error('password')
                                 <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Mobile Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="number" id="mobile_number"  placeholder="Enter your Mobile Number"/>
                                </div>
                                @error('number')
                                 <p class="alert alert-danger">{{ $message }}</p>
                                @enderror

							</div>
						</div>


                        <div class="form-group">
                           <b>City Name</b>
                            <select name="city_id" id="" value="city" class="form-control">
                                @foreach ($data as $record)
                                    <option value="{{ $record['state_id'] }}" id=""> {{  $record['city']   }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                           <b>Select profession</b>
                            <select name="profession_id" id="" value="profession" class="form-control">
                                @foreach ($profession as $roles)
                                    <option value="{{ $roles['id'] }}" id=""> {{  $roles['profession']   }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                           <b>Select Expertise Level</b>
                            <select name="expertise_id" id="" value="Expertise" class="form-control">
                                @foreach ($expertise as $ex)
                                    <option value="{{ $ex['id'] }}" id=""> {{  $ex['expertise']   }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                           <b>Upload User Image</b>
                            <input type="file" name="user_image">
                        </div>

                               @error('user_image')
                                 <p class="alert alert-danger">{{ $message }}</p>
                                @enderror

						<div class="form-group">
                             <input type="submit" value="Register" class="btn btn-primary btn-lg btn-block login-button">
						</div>

                        <div class="login-register">
				            <a href="index.php">Login</a>
				        </div>


			    {!! Form::close() !!}
				</div>
			</div>
		</div>

@endsection
