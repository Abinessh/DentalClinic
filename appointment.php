<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
</head>
<body>

	<!-- Button trigger modal -->
	<!-- <center><button type="button" class="btn btn-primary mx-5 my-5" data-toggle="modal" data-target="#appointment_modal">
	 	Appointment
	</button></center>
 -->
	<!-- Modal -->
	<div class="modal fade" id="appointment_modal" tabindex="-1" role="dialog" aria-labelledby="appointment_modallabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header bg-light">
	        <h5 class="modal-title text-primary mr-5" id="appointment_modal" style="margin: 0 auto;">Make an appointment</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- Form in modal -->
	      <form action="index.php" method="post">
		      <div class="modal-body">
		        	<div class="row">
		        		<!-- Email address -->
		        	  	<div class="form-group col">
						    <label for="email_address">Email address</label>
						    <input type="email" class="form-control" id="email_address" placeholder="name@example.com" name="email">
					 	</div>
					 	<!-- Phone number -->
					 	<div class="form-group col">
						    <label for="phone">Phone Number</label>
						    <input type="text" class="form-control" id="phone" placeholder="ex:8524951048" name="phone_no">
					 	</div>
					</div>
					<div class="row">
						<!-- Appointment Date -->
		        	  	<div class="form-group col">
						    <label for="appointment_time">Appointment Date</label>
						    <input class="form-control" id="datepicker" placeholder="Appointment Date" name="appointment_date">
					 	</div>
					 	<!-- Appointment Time -->
					 	<div class="form-group col">
						    
						    <!-- <input type="text" class="form-control" id="appointment_time" placeholder="ex:	10:15 AM" name="appointment_time"> -->
					 		 <div class="form-group">
							  <label for="appointment_time">Appointment Time</label>  
							  <select class="form-control" id="sel1" name="get_time">
							    <option value="10:00:00">10:00 AM</option>
							    <option value="10:30:00">10:30 AM</option>
							    <option value="11:00:00">11:00 AM</option>
							    <option value="11:30:00">11:30 AM</option>
							    <option value="12:00:00">12:00 PM</option>
							    <option value="12:30:00">12:30 PM</option>
							    <option value="13:00:00">1:00 PM</option>
							    <option value="17:00:00">5:00 PM</option>
							    <option value="17:30:00">5:30 PM</option>
							    <option value="18:00:00">6:00 PM</option>
							    <option value="18:30:00">6:30 PM</option>
							    <option value="19:00:00">7:00 PM</option>
							    <option value="19:30:00">7:30 PM</option>
							    <option value="20:00:00">8:00 PM</option>
							    <option value="20:30:00">8:30 PM</option>
							    <option value="21:00:00">9:00 PM</option>
							    <option value="21:30:00">9:30 PM</option>

							  </select>
							</div> 
					 	</div>
					</div>
		        	  
		        	<div class="row">
		        		<div class="form-group col">
						    <label for="name">Patient Name</label>
						    <input type="text" class="form-control" id="name" placeholder="ex:Joseph" name="name">
					 	</div>
		        	</div>
		        	
		        		<label for="reason row">Appoinment Reason</label>
			              <div class="form-group"> 
			                   <div class="col">
			                        <label class="radio">
			                             <input name="reason" id="input-reason-root" value="Root Canal Treatment" type="radio" />&nbsp;Root Canal Treatment
			                         </label>
			                    </div>
			                    <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Gum Treatment" type="radio" />&nbsp;Gum Treatment
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Clip Treatment" type="radio" />&nbsp;Clip Treatment
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Kids Dental Treatment" type="radio" />&nbsp;Kids Dental Treatment
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Crowns and Bridges" type="radio" />&nbsp;Crowns and Bridges
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Dental Implants" type="radio" />&nbsp;Dental Implants
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Complete Denture" type="radio" />&nbsp;Complete Denture
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-reason-gum" value="Cosmetic Treatment" type="radio" />&nbsp;Cosmetic Treatment
			                         </label>
			                     </div>
			                     <div class="col">
			                         <label class="radio">
			                              <input name="reason" id="input-others" value="others" type="radio" />&nbsp;Others
			                         </label>
			                     </div>
			                </div>
		        	
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" name="submit">Make Appointment</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- bootstrap scripts -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$("#datepicker").datepicker();
	</script>
</body>
</html>
