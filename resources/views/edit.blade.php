 <div class ="row">
                                            <div div class="form-group col-md-6">
                                            <label for="exampleFormControlInput1">Nome do time:</label>
                                                <input type="text" class="form-control" name="time" value="{{$formu->time}}" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nome do capitão:</label>
                                                <input type="text" name="namec" value="{{$formu->namec}}"  class="form-control" required>
                                            </div>
                                        </div>           
                                        <div class ="row">
                                            <div div class="form-group col-md-6">
                                            <label for="exampleFormControlInput1">Contato:</label>
                                                <input type="text" class="form-control" name="contato" value="{{$formu->contato}}" placeholder="name@example.com" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Email do capitão:</label>
                                                <input type="text" name="emailc" value="{{$formu->emailc}}"  class="form-control" required>
                                            </div>
                                        </div>   

                                        <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nome do player 2:</label>
                                                <input type="text" class="form-control" name="name2" value="{{$formu->name2}}" placeholder="name@example.com" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nick do capitão:</label>
                                                <input type="text" name="nickc" value="{{$formu->nickc}}"  class="form-control" required>
                                            </div>
                                        </div>   

                                        <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Email do player 2:</label>
                                                <input type="text" class="form-control" name="email2" value="{{$formu->email2}}" placeholder="name@example.com" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nick do player 2:</label>
                                                <input type="text" name="nick2" value="{{$formu->nick2}}"  class="form-control" >
                                            </div>
                                        </div> 

                                            <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nome do player 3:</label>
                                                <input type="text" class="form-control" name="name3" value="{{$formu->name3}}" placeholder="name@example.com">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Email do player 3:</label>
                                                <input type="text" name="email3" value="{{$formu->email3}}"  class="form-control" >
                                            </div>
                                        </div>

                                         <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nick do player 3:</label>
                                                <input type="text" class="form-control" name="nick3" value="{{$formu->nick3}}" placeholder="name@example.com" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nome do player 4:</label>
                                                <input type="text" name="name4" value="{{$formu->name4}}"  class="form-control" >
                                            </div>
                                        </div>

                                         <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Email do player 4:</label>
                                                <input type="text" class="form-control" name="email4" value="{{$formu->email4}}" placeholder="name@example.com" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nick do player 4:</label>
                                                <input type="text" name="nick4" value="{{$formu->nick4}}"  class="form-control" >
                                            </div>
                                        </div> 

                                         <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nome do player 5:</label>
                                                <input type="text" class="form-control" name="name5" value="{{$formu->name5}}" placeholder="name@example.com" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Email do player 5:</label>
                                                <input type="text" name="email5" value="{{$formu->email5}}"  class="form-control" >
                                            </div>
                                        </div>

                                        <div class ="row">
                                            <div div class="form-group col-md-6">
                                                <label for="exampleFormControlInput1">Nick player 5:</label>
                                                <input type="text" class="form-control" name="nick5" value="{{$formu->nick5}}" placeholder="name@example.com" >
                                            </div>
                                      </div>

                                        <div class ="row">
                                              <div class="form-group col-md-6">
                                                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Status pagamento:</label>
                                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0"  name="status" id="inlineFormCustomSelectPref" required>
                                                  <option selected value="{{$formu->status}}">Escolha..</option>
                                                  <option value="0">EM DEBITO</option>
                                                  <option value="1">PAGO</option> 
                                              </select>
                                          </div>
                                              <div class="form-group col-md-6">
                                                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Modalidade:</label>
                                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0"  name="categoria" id="inlineFormCustomSelectPref" required>
                                                  <option selected value="{{$formu->categoria}}">Escolha..</option>
                                                  <option value="1">CS-GO</option>
                                                  <option value="2">Clash Royale</option>
                                                  <option value="3">Dota 2</option>
                                                  <option value="4">FIFA 17</option> 
  
                                              </select>
                                          </div>
                                      </div>


