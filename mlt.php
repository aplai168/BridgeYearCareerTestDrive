<form action = "?m=/results/Medical_Lab_Technician" method = "POST">
  <div class = "col-md-12">
    <div  class ="container" style = "padding-top: 60px;">

      <!-- Nav tabs -->
      <input type = "hidden" name = "sim" value = "mlt">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#380085" aria-controls="home" role="tab" data-toggle="tab">Kiara Moore</a></li>
        <li role="presentation"><a href="#996733" aria-controls="996733" role="tab" data-toggle="tab">Rafel Sanchez</a></li>
        <li role="presentation"><a href="#359426" aria-controls="359426" role="tab" data-toggle="tab">James Seidel</a></li>
        <li role="presentation"><a href="#256742" aria-controls="256742" role="tab" data-toggle="tab">Roxie Wadley</a></li>
        <li role="presentation"><a href="#468421" aria-controls="468421" role="tab" data-toggle="tab">Mindy Cerdero</a></li>
        <li role ="presentation"><button class = "btn btn-default" name = "submitform">Submit Answers</button></li>
      </ul>

      <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="380085">
            <div class = "panel panel-default">
              <div class = "panel-body">
                <div class = "col-md-6">
                  <div class = "table table-responsive">
                    <table class = "table">
                      <tr>
                        <td>Patient Name</td>
                        <td>Kiara Moore</td>
                      </tr>
                      <tr>
                        <td>Patient ID</td>
                        <td>380085</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>09/13/1995</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                      <tr>
                        <td>Physician's Name</td>
                        <td>Dr. Jones</td>
                      </tr>
                    </table>
                  </div>
                  <hr>

                  <h2>Physical Examination</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <p>Color</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "first_sample_color">
                        <option value = "---">---</option>
                        <option value = "colorless">Colorless</option>
                        <option value = "light_yellow">Light Yellow</option>
                        <option value = "dark_yellow">Dark Yellow</option>
                        <option value = "amber">Amber</option>
                        <option value = "other">Other</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Appearance</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "first_sample_appearance">
                      <option value = "---">---</option>
                        <option value = "clear">Clear</option>
                        <option value = "hazy">Hazy</option>
                        <option value = "cloudy">Cloudy</option>
                        <option value = "turbid">Turbid</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Mucus</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "first_sample_mucus">
                      <option value = "---">---</option>
                        <option value = "yes">Yes</option>
                        <option value = "no">No</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class = "col-md-6">
                  <h2>Chemical Examination</h2>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Leukocytes</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_leukocytes">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Nitrite</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_nitrite">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Urobilinogen</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_urobilinogen">
                        <option value = "---">---</option>
                          <option value = "0.2"> 0.2 </option>
                          <option value = "1"> 1 </option>
                          <option value = "2"> 2 </option>
                          <option value = "4"> 4 </option>
                          <option value = "8"> 8 </option>
                          <option value = "12"> 12 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Protein</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_protein">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "15"> 15 </option>
                          <option value = "30"> 30 / + </option>
                          <option value = "100"> 100 / ++ </option>
                          <option value = "300"> 300 / +++ </option>
                          <option value = "2000"> 2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                  <div class= "row">
                      <div class = "col-sm-6">
                        <p>pH</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_ph">
                        <option value = "---">---</option>
                          <option value = "5"> 5.0 </option>
                          <option value = "6"> 6.0 </option>
                          <option value = "6.5"> 6.5 </option>
                          <option value = "7"> 7.0 </option>
                          <option value = "7.5"> 7.5 </option>
                          <option value = "8"> 8 </option>
                          <option value = "9"> 9 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Blood</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_blood">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                          <option value = "5-10"> 5-10 </option>
                          <option value = "50"> 50 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Specific Gravity</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_specific_gravity">
                        <option value = "---">---</option>
                          <option value = "1.000">1.000</option>
                          <option value = "1.005">1.005</option>
                          <option value = "1.010">1.010</option>
                          <option value = "1.015">1.015</option>
                          <option value = "1.020">1.020</option>
                          <option value = "1.025">1.025</option>
                          <option value = "1.030">1.030</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Ketone</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_ketone">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> +/small </option>
                          <option value = "++"> ++/mod </option>
                          <option value = "+++"> +++/large </option>
                          <option value = "++++"> ++++/excess </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Bilirubin</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_bilirubin">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Glucose</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "first_sample_glucose">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "250"> 250 / + </option>
                          <option value = "500"> 500 / ++ </option>
                          <option value = "1000"> 1000 / +++ </option>
                          <option value = "2000"> >2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class = "col-md-12">
                  <h2>Physician Notifications</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="first_sample_diabetes">Diabetes</label>
                      <input type="checkbox" id = "first_sample_diabetes" name="first_sample_diabetes">
                    </div>
                    <div class = "col-md-4">
                      <label for="first_sample_kidney_disease">Kidney Disease (Mild)</label>
                      <input type="checkbox" id = "first_sample_kidney_disease" name="first_sample_kidney_disease">
                    </div>
                    <div class = "col-md-4">
                      <label for="first_sample_liver_disease">Liver Disease</label>
                      <input type="checkbox" id = "first_sample_liver_disease" name="first_sample_liver_disease">
                    </div>
                  </div>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="first_sample_hematuria">Hematuria</label>
                      <input type="checkbox" id = "first_sample_hematuria" name="first_sample_hematuria">
                    </div>
                    <div class = "col-md-4">
                      <label for="first_sample_kidney_disease_severe">Mucus</label>
                      <input type="checkbox" id = "first_sample_kidney_disease_severe" name="first_sample_kidney_disease_severe">
                    </div>
                    <div class = "col-md-4">
                      <label for="first_sample_urinary_tract">Urinary Tract Infection</label>
                      <input type="checkbox" id = "first_sample_urinary_tract" name="first_sample_urinary_tract">
                    </div>
                  </div>    
                </div>
        
              </div>
            </div>
          </div>
          <!-- Second Patient -->
          <div role="tabpanel" class="tab-pane" id="996733">
            <div class = "panel panel-default">
              <div class = "panel-body">
                <div class = "col-md-6">
                  <div class = "table table-responsive">
                    <table class = "table">
                      <tr>
                        <td>Patient Name</td>
                        <td>Rafel Sanchez</td>
                      </tr>
                      <tr>
                        <td>Patient ID</td>
                        <td>996733</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>04/22/1992</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td>Physician's Name</td>
                        <td>Dr. Hernandez</td>
                      </tr>
                    </table>
                  </div>
                  <hr>

                  <h2>Physical Examination</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <p>Color</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "second_sample_color">
                      <option value = "---">---</option>
                        <option value = "colorless">Colorless</option>
                        <option value = "light_yellow">Light Yellow</option>
                        <option value = "dark_yellow">Dark Yellow</option>
                        <option value = "amber">Amber</option>
                        <option value = "other">Other</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Appearance</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "second_sample_appearance">
                      <option value = "---">---</option>
                        <option value = "clear">Clear</option>
                        <option value = "hazy">Hazy</option>
                        <option value = "cloudy">Cloudy</option>
                        <option value = "turbid">Turbid</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Mucus</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "second_sample_mucus">
                      <option value = "---">---</option>
                        <option value = "yes">Yes</option>
                        <option value = "no">No</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class = "col-md-6">
                  <h2>Chemical Examination</h2>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Leukocytes</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_leukocytes">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Nitrite</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_nitrite">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Urobilinogen</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_urobilinogen">
                        <option value = "---">---</option>
                          <option value = "0.2"> 0.2 </option>
                          <option value = "1"> 1 </option>
                          <option value = "2"> 2 </option>
                          <option value = "4"> 4 </option>
                          <option value = "8"> 8 </option>
                          <option value = "12"> 12 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Protein</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_protein">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "15"> 15 </option>
                          <option value = "30"> 30 / + </option>
                          <option value = "100"> 100 / ++ </option>
                          <option value = "300"> 300 / +++ </option>
                          <option value = "2000"> 2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                  <div class= "row">
                      <div class = "col-sm-6">
                        <p>pH</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_ph">
                        <option value = "---">---</option>
                          <option value = "5"> 5.0 </option>
                          <option value = "6"> 6.0 </option>
                          <option value = "6.5"> 6.5 </option>
                          <option value = "7"> 7.0 </option>
                          <option value = "7.5"> 7.5 </option>
                          <option value = "8"> 8 </option>
                          <option value = "9"> 9 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Blood</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_blood">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                          <option value = "5-10"> 5-10 </option>
                          <option value = "50"> 50 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Specific Gravity</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_specific_gravity">
                        <option value = "---">---</option>
                          <option value = "1.000">1.000</option>
                          <option value = "1.005">1.005</option>
                          <option value = "1.010">1.010</option>
                          <option value = "1.015">1.015</option>
                          <option value = "1.020">1.020</option>
                          <option value = "1.025">1.025</option>
                          <option value = "1.030">1.030</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Ketone</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_ketone">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> +/small </option>
                          <option value = "++"> ++/mod </option>
                          <option value = "+++"> +++/large </option>
                          <option value = "++++"> ++++/excess </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Bilirubin</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_bilirubin">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Glucose</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "second_sample_glucose">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "250"> 250 / + </option>
                          <option value = "500"> 500 / ++ </option>
                          <option value = "1000"> 1000 / +++ </option>
                          <option value = "2000"> >2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class = "col-md-12">
                  <h2>Physician Notifications</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="second_sample_diabetes">Diabetes</label>
                      <input type="checkbox" id = "second_sample_diabetes" name="second_sample_diabetes">
                    </div>
                    <div class = "col-md-4">
                      <label for="second_sample_kidney_disease">Kidney Disease (Mild)</label>
                      <input type="checkbox" id = "second_sample_kidney_disease" name="second_sample_kidney_disease">
                    </div>
                    <div class = "col-md-4">
                      <label for="second_sample_liver_disease">Liver Disease</label>
                      <input type="checkbox" id = "second_sample_liver_disease" name="second_sample_liver_disease">
                    </div>
                  </div>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="second_sample_hematuria">Hematuria</label>
                      <input type="checkbox" id = "second_sample_hematuria" name="second_sample_hematuria">
                    </div>
                    <div class = "col-md-4">
                      <label for="second_sample_kidney_disease_severe">Mucus</label>
                      <input type="checkbox" id = "second_sample_kidney_disease_severe" name="second_sample_kidney_disease_severe">
                    </div>
                    <div class = "col-md-4">
                      <label for="second_sample_urinary_tract">Urinary Tract Infection</label>
                      <input type="checkbox" id = "second_sample_urinary_tract" name="second_sample_urinary_tract">
                    </div>
                  </div>    
                </div>
              </div>
          </div>
          </div>

          <!-- Third Patient -->
          <div role="tabpanel" class="tab-pane" id="359426">
            <div class = "panel panel-default">
              <div class = "panel-body">
                <div class = "col-md-6">
                  <div class = "table table-responsive">
                    <table class = "table">
                      <tr>
                        <td>Patient Name</td>
                        <td>James Seidel</td>
                      </tr>
                      <tr>
                        <td>Patient ID</td>
                        <td>359426</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>03/23/17</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td>Physician's Name</td>
                        <td>Dr. Sanchez</td>
                      </tr>
                    </table>
                  </div>
                  <hr>

                  <h2>Physical Examination</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <p>Color</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "third_sample_color">
                      <option value = "---">---</option>
                        <option value = "colorless">Colorless</option>
                        <option value = "light_yellow">Light Yellow</option>
                        <option value = "dark_yellow">Dark Yellow</option>
                        <option value = "amber">Amber</option>
                        <option value = "other">Other</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Appearance</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "third_sample_appearance">
                      <option value = "---">---</option>
                        <option value = "clear">Clear</option>
                        <option value = "hazy">Hazy</option>
                        <option value = "cloudy">Cloudy</option>
                        <option value = "turbid">Turbid</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Mucus</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "third_sample_mucus">
                      <option value = "---">---</option>
                        <option value = "yes">Yes</option>
                        <option value = "no">No</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class = "col-md-6">
                  <h2>Chemical Examination</h2>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Leukocytes</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_leukocytes">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Nitrite</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_nitrite">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Urobilinogen</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_urobilinogen">
                        <option value = "---">---</option>
                          <option value = "0.2"> 0.2 </option>
                          <option value = "1"> 1 </option>
                          <option value = "2"> 2 </option>
                          <option value = "4"> 4 </option>
                          <option value = "8"> 8 </option>
                          <option value = "12"> 12 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Protein</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_protein">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "15"> 15 </option>
                          <option value = "30"> 30 / + </option>
                          <option value = "100"> 100 / ++ </option>
                          <option value = "300"> 300 / +++ </option>
                          <option value = "2000"> 2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                  <div class= "row">
                      <div class = "col-sm-6">
                        <p>pH</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_ph">
                        <option value = "---">---</option>
                          <option value = "5"> 5.0 </option>
                          <option value = "6"> 6.0 </option>
                          <option value = "6.5"> 6.5 </option>
                          <option value = "7"> 7.0 </option>
                          <option value = "7.5"> 7.5 </option>
                          <option value = "8"> 8 </option>
                          <option value = "9"> 9 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Blood</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_blood">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                          <option value = "5-10"> 5-10 </option>
                          <option value = "50"> 50 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Specific Gravity</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_specific_gravity">
                        <option value = "---">---</option>
                          <option value = "1.000">1.000</option>
                          <option value = "1.005">1.005</option>
                          <option value = "1.010">1.010</option>
                          <option value = "1.015">1.015</option>
                          <option value = "1.020">1.020</option>
                          <option value = "1.025">1.025</option>
                          <option value = "1.030">1.030</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Ketone</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_ketone">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> +/small </option>
                          <option value = "++"> ++/mod </option>
                          <option value = "+++"> +++/large </option>
                          <option value = "++++"> ++++/excess </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Bilirubin</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_bilirubin">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Glucose</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "third_sample_glucose">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "250"> 250 / + </option>
                          <option value = "500"> 500 / ++ </option>
                          <option value = "1000"> 1000 / +++ </option>
                          <option value = "2000"> >2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class = "col-md-12">
                  <h2>Physician Notifications</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="third_sample_diabetes">Diabetes</label>
                      <input type="checkbox" id = "third_sample_diabetes" name="third_sample_diabetes">
                    </div>
                    <div class = "col-md-4">
                      <label for="third_sample_kidney_disease">Kidney Disease (Mild)</label>
                      <input type="checkbox" id = "third_sample_kidney_disease" name="third_sample_kidney_disease">
                    </div>
                    <div class = "col-md-4">
                      <label for="third_sample_liver_disease">Liver Disease</label>
                      <input type="checkbox" id = "third_sample_liver_disease" name="third_sample_liver_disease">
                    </div>
                  </div>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="third_sample_hematuria">Hematuria</label>
                      <input type="checkbox" id = "third_sample_hematuria" name="third_sample_hematuria">
                    </div>
                    <div class = "col-md-4">
                      <label for="third_sample_kidney_disease_severe">Mucus</label>
                      <input type="checkbox" id = "third_sample_kidney_disease_severe" name="third_sample_kidney_disease_severe">
                    </div>
                    <div class = "col-md-4">
                      <label for="third_sample_urinary_tract">Urinary Tract Infection</label>
                      <input type="checkbox" id = "third_sample_urinary_tract" name="third_sample_urinary_tract">
                    </div>
                  </div>    
                </div>
              </div>
          </div>
          </div>


          <!-- Fourth Patient -->
          <div role="tabpanel" class="tab-pane" id="256742">
            <div class = "panel panel-default">
              <div class = "panel-body">
                <div class = "col-md-6">
                  <div class = "table table-responsive">
                    <table class = "table">
                      <tr>
                        <td>Patient Name</td>
                        <td>Roxie Wadley</td>
                      </tr>
                      <tr>
                        <td>Patient ID</td>
                        <td>256742</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>07/03/1934</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td>Physician's Name</td>
                        <td>Dr. Sanchez</td>
                      </tr>
                    </table>
                  </div>
                  <hr>

                  <h2>Physical Examination</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <p>Color</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "fourth_sample_color">
                      <option value = "---">---</option>
                        <option value = "colorless">Colorless</option>
                        <option value = "light_yellow">Light Yellow</option>
                        <option value = "dark_yellow">Dark Yellow</option>
                        <option value = "amber">Amber</option>
                        <option value = "other">Other</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Appearance</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "fourth_sample_appearance">
                      <option value = "---">---</option>
                        <option value = "clear">Clear</option>
                        <option value = "hazy">Hazy</option>
                        <option value = "cloudy">Cloudy</option>
                        <option value = "turbid">Turbid</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Mucus</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "fourth_sample_mucus">
                      <option value = "---">---</option>
                        <option value = "yes">Yes</option>
                        <option value = "no">No</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class = "col-md-6">
                  <h2>Chemical Examination</h2>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Leukocytes</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_leukocytes">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Nitrite</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_nitrite">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Urobilinogen</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_urobilinogen">
                        <option value = "---">---</option>
                          <option value = "0.2"> 0.2 </option>
                          <option value = "1"> 1 </option>
                          <option value = "2"> 2 </option>
                          <option value = "4"> 4 </option>
                          <option value = "8"> 8 </option>
                          <option value = "12"> 12 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Protein</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_protein">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "15"> 15 </option>
                          <option value = "30"> 30 / + </option>
                          <option value = "100"> 100 / ++ </option>
                          <option value = "300"> 300 / +++ </option>
                          <option value = "2000"> 2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                  <div class= "row">
                      <div class = "col-sm-6">
                        <p>pH</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_ph">
                        <option value = "---">---</option>
                          <option value = "5"> 5.0 </option>
                          <option value = "6"> 6.0 </option>
                          <option value = "6.5"> 6.5 </option>
                          <option value = "7"> 7.0 </option>
                          <option value = "7.5"> 7.5 </option>
                          <option value = "8"> 8 </option>
                          <option value = "9"> 9 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Blood</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_blood">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                          <option value = "5-10"> 5-10 </option>
                          <option value = "50"> 50 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Specific Gravity</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_specific_gravity">
                        <option value = "---">---</option>
                          <option value = "1.000">1.000</option>
                          <option value = "1.005">1.005</option>
                          <option value = "1.010">1.010</option>
                          <option value = "1.015">1.015</option>
                          <option value = "1.020">1.020</option>
                          <option value = "1.025">1.025</option>
                          <option value = "1.030">1.030</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Ketone</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_ketone">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> +/small </option>
                          <option value = "++"> ++/mod </option>
                          <option value = "+++"> +++/large </option>
                          <option value = "++++"> ++++/excess </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Bilirubin</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_bilirubin">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Glucose</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fourth_sample_glucose">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "250"> 250 / + </option>
                          <option value = "500"> 500 / ++ </option>
                          <option value = "1000"> 1000 / +++ </option>
                          <option value = "2000"> >2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class = "col-md-12">
                  <h2>Physician Notifications</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="fourth_sample_diabetes">Diabetes</label>
                      <input type="checkbox" id = "fourth_sample_diabetes" name="fourth_sample_diabetes">
                    </div>
                    <div class = "col-md-4">
                      <label for="fourth_sample_kidney_disease">Kidney Disease (Mild)</label>
                      <input type="checkbox" id = "fourth_sample_kidney_disease" name="fourth_sample_kidney_disease">
                    </div>
                    <div class = "col-md-4">
                      <label for="fourth_sample_liver_disease">Liver Disease</label>
                      <input type="checkbox" id = "fourth_sample_liver_disease" name="fourth_sample_liver_disease">
                    </div>
                  </div>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="fourth_sample_hematuria">Hematuria</label>
                      <input type="checkbox" id = "fourth_sample_hematuria" name="fourth_sample_hematuria">
                    </div>
                    <div class = "col-md-4">
                      <label for="fourth_sample_kidney_disease_severe">Mucus</label>
                      <input type="checkbox" id = "fourth_sample_kidney_disease_severe" name="fourth_sample_kidney_disease_severe">
                    </div>
                    <div class = "col-md-4">
                      <label for="fourth_sample_urinary_tract">Urinary Tract Infection</label>
                      <input type="checkbox" id = "fourth_sample_urinary_tract" name="fourth_sample_urinary_tract">
                    </div>
                  </div>    
                </div>
              </div>
          </div>
          </div>

          <!-- Fifth Patient -->
          <div role="tabpanel" class="tab-pane" id="468421">
            <div class = "panel panel-default">
              <div class = "panel-body">
                <div class = "col-md-6">
                  <div class = "table table-responsive">
                    <table class = "table">
                      <tr>
                        <td>Patient Name</td>
                        <td>Mindy Cerdero</td>
                      </tr>
                      <tr>
                        <td>Patient ID</td>
                        <td>468421</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>09/13/1995</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td>Physician's Name</td>
                        <td>Dr. Hernandez</td>
                      </tr>
                    </table>
                  </div>
                  <hr>

                  <h2>Physical Examination</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <p>Color</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "fifth_sample_color">
                      <option value = "---">---</option>
                        <option value = "colorless">Colorless</option>
                        <option value = "light_yellow">Light Yellow</option>
                        <option value = "dark_yellow">Dark Yellow</option>
                        <option value = "amber">Amber</option>
                        <option value = "other">Other</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Appearance</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "fifth_sample_appearance">
                      <option value = "---">---</option>
                        <option value = "clear">Clear</option>
                        <option value = "hazy">Hazy</option>
                        <option value = "cloudy">Cloudy</option>
                        <option value = "turbid">Turbid</option>
                      </select>
                    </div>
                    <div class = "col-md-4">
                      <p>Mucus</p>
                    </div>
                    <div class = "col-md-8">
                      <select class = "form-control" name = "fifth_sample_mucus">
                      <option value = "---">---</option>
                        <option value = "yes">Yes</option>
                        <option value = "no">No</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class = "col-md-6">
                  <h2>Chemical Examination</h2>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Leukocytes</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_leukocytes">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Nitrite</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_nitrite">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Urobilinogen</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_urobilinogen">
                        <option value = "---">---</option>
                          <option value = "0.2"> 0.2 </option>
                          <option value = "1"> 1 </option>
                          <option value = "2"> 2 </option>
                          <option value = "4"> 4 </option>
                          <option value = "8"> 8 </option>
                          <option value = "12"> 12 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Protein</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_protein">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "15"> 15 </option>
                          <option value = "30"> 30 / + </option>
                          <option value = "100"> 100 / ++ </option>
                          <option value = "300"> 300 / +++ </option>
                          <option value = "2000"> 2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                  <div class= "row">
                      <div class = "col-sm-6">
                        <p>pH</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_ph">
                        <option value = "---">---</option>
                          <option value = "5"> 5.0 </option>
                          <option value = "6"> 6.0 </option>
                          <option value = "6.5"> 6.5 </option>
                          <option value = "7"> 7.0 </option>
                          <option value = "7.5"> 7.5 </option>
                          <option value = "8"> 8 </option>
                          <option value = "9"> 9 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Blood</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_blood">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                          <option value = "5-10"> 5-10 </option>
                          <option value = "50"> 50 </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Specific Gravity</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_specific_gravity">
                        <option value = "---">---</option>
                          <option value = "1.000">1.000</option>
                          <option value = "1.005">1.005</option>
                          <option value = "1.010">1.010</option>
                          <option value = "1.015">1.015</option>
                          <option value = "1.020">1.020</option>
                          <option value = "1.025">1.025</option>
                          <option value = "1.030">1.030</option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Ketone</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_ketone">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "+"> +/small </option>
                          <option value = "++"> ++/mod </option>
                          <option value = "+++"> +++/large </option>
                          <option value = "++++"> ++++/excess </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Bilirubin</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_bilirubin">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "+"> + </option>
                          <option value = "++"> ++ </option>
                          <option value = "+++"> +++ </option>
                        </select>
                      </div>
                  </div>
                  <div class = "row">
                      <div class = "col-sm-6">
                        <p>Glucose</p>
                      </div>
                      <div class = "col-sm-6">
                        <select class = "form-control" name = "fifth_sample_glucose">
                        <option value = "---">---</option>
                          <option value = "Neg">Neg</option>
                          <option value = "Trace">Trace</option>
                          <option value = "250"> 250 / + </option>
                          <option value = "500"> 500 / ++ </option>
                          <option value = "1000"> 1000 / +++ </option>
                          <option value = "2000"> >2000 / ++++ </option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class = "col-md-12">
                  <h2>Physician Notifications</h2>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="fifth_sample_diabetes">Diabetes</label>
                      <input type="checkbox" id = "fifth_sample_diabetes" name="fifth_sample_diabetes">
                    </div>
                    <div class = "col-md-4">
                      <label for="fifth_sample_kidney_disease">Kidney Disease (Mild)</label>
                      <input type="checkbox" id = "fifth_sample_kidney_disease" name="fifth_sample_kidney_disease">
                    </div>
                    <div class = "col-md-4">
                      <label for="fifth_sample_liver_disease">Liver Disease</label>
                      <input type="checkbox" id = "fifth_sample_liver_disease" name="fifth_sample_liver_disease">
                    </div>
                  </div>
                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="fifth_sample_hematuria">Hematuria</label>
                      <input type="checkbox" id = "fifth_sample_hematuria" name="fifth_sample_hematuria">
                    </div>
                    <div class = "col-md-4">
                      <label for="fifth_sample_kidney_disease_severe">Mucus</label>
                      <input type="checkbox" id = "fifth_sample_kidney_disease_severe" name="fifth_sample_kidney_disease_severe">
                    </div>
                    <div class = "col-md-4">
                      <label for="fifth_sample_urinary_tract">Urinary Tract Infection</label>
                      <input type="checkbox" id = "fifth_sample_urinary_tract" name="fifth_sample_urinary_tract">
                    </div>
                  </div>    
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</form>
<hr>
<br>