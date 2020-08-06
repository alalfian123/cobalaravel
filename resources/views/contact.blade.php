@extends('layouts.template')

@section('content')
		

		<div id="fh5co-main">
			<div class="fh5co-more-contact">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-globe"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="#">info@domain.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-map"></i>
								</div>
								<div class="fh5co-text">
									<p>198 West 21th Street, Suite 721 New York NY 10016</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="tel://">+123 456 7890</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div class="row">
					<div class="col-md-4">
						<h2>Get In Touch</h2>
					</div>
				</div>
				<form class="cmxform" id='form_msg' name='form_msg'>
					<div class="row">
						<div class="col-md-12">
                                                    {{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Name" id="name" name="name">
									</div>
									<div class="form-group">
                                                                            <input type="email" class="form-control" placeholder="Email" id='email' name='email'>
									</div>
									<div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Phone" id='phone' name='phone'>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea name="message" id="message" cols="30" rows="7" class="form-control" required="required" placeholder="Message"></textarea>
									</div>
									<div class="form-group">
										<input type="button" id="btn-save" class="btn btn-primary btn-md" value="Send Message">
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</form>
			</div>
			<div id="map"></div>	
		</div>
@stop
@section('js-content')
<script type="text/javascript">
    $(function() {
        $("li.fh5co-active").removeClass("fh5co-active");
        $("#sb-contact").addClass("fh5co-active");
    });
    
    $("#btn-save").click(function() {
        $("#form_msg").validate({
                rules: {
                        message: { "required" : true}
                },
                messages: {
                        message: {"required" : "Please Insert message"}
                }
        });

        var form_valid = $('#form_msg').valid();  
        
        if(form_valid) {
            bootbox.confirm({
                    size: "medium",
                    message: "Save Data Sales Channel ?",
                    callback:function(result) {
                        if(result == true){
                            var formData = $('#form_msg').serialize();
                            var url = "{{ URL::to('contact') }}" + '/post_save_message' ;
                            $.ajax({
                                type: "POST",
                                url: url,
                                data:formData,
                                dataType:"JSON",
                                success: function(resp){
                                    if(resp == true){
                                        alert('Response Sucesss Saved');
                                    }else{
                                        alert('Failed');
                                    }
                                    dialog.modal('hide')
                                }
                            })
                        }
                    }
            })

            return false;
            
        }
    })
</script>
@stop

