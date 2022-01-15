<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
       <div class="row">
          <div class="col-lg-5">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h5><i class="icon fas fa-check"></i></h5>
                        {{session('success')}}
                    </div>
                @endif
             <div class="section-content bg-white p-5 shadow">
                <div class="heading-section text-center">
                   <span class="subheading">
                   Reservation
                   </span>
                   <h2>
                      Book Now
                   </h2>
                </div>
                <form method="post" name="contact-us" action="{{route('admin.contact.store')}}">
                    @csrf
                   <div class="row">
                      <div class="col-md-12 form-group">
                         <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="col-md-12 form-group">
                         <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>
                      <div class="col-md-12 form-group">
                         <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="Phone" required>
                      </div>
                      <div class="col-md-6 form-group">
                         <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="data" data-target="#datetimepicker4" placeholder="Date" required/>
                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                               <div class="input-group-text">
                                  <span class="lnr lnr-calendar-full"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-6 form-group">
                         <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" name="time" placeholder="Time" required/>
                            <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                               <div class="input-group-text">
                                  <span class="lnr lnr-clock"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-12 form-group">
                         <select class="form-control" id="selectPerson" name="person" required>
                            <option value=""></option>
                            <option value="Student">Student</option>
                            <option value="Businessman">Businessman</option>
                            <option value="Businesswoman">Businesswoman</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Other">Other</option>
                         </select>
                      </div>
                      <div class="col-md-12 form-group">
                         <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
                      </div>
                      <div class="col-md-12 text-center">
                         <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End of Reservation Section -->
