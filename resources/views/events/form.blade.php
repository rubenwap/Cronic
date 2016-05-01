
                      <div class="form-group">

                          {!!Form::label('title', 'What do you need to do? ')!!}
                          {!!Form::text('title', null, ['class'=>'form-control'])!!}
                      </div>

                      <div class="form-group">

                          {!!Form::label('start', 'When do you need to start it? ')!!}
                          {!!Form::text('start', null, ['class'=>'form-control timepicker'])!!}
                      </div>

                      <div class="form-group">

                          {!!Form::label('end', 'When do you need to end it? ')!!}
                          {!!Form::text('end', null, ['class'=>'form-control timepicker'])!!}
                      </div>

                      <div class="form-group">
                       {!!Form::submit($submitBtn,  ['class'=>'btn btn-primary form-control'])!!}
                      </div>
