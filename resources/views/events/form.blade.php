
                      <div class="form-group">

                          {!!Form::label('title', 'What do you need? ')!!}
                          {!!Form::text('title', null, ['class'=>'form-control'])!!}
                      </div>

                      <div class="form-group">

                          {!!Form::label('start', 'Start date: ')!!}
                          {!!Form::text('start', null, ['class'=>'form-control timepicker'])!!}
                      </div>

                      <div class="form-group">

                          {!!Form::label('end', 'End date: ')!!}
                          {!!Form::text('end', null, ['class'=>'form-control timepicker'])!!}
                      </div>

                      <div class="form-group">
                   
                       {!!Form::submit($submitBtn,  ['class'=>'saveevent btn btn-primary form-control record'])!!}
                      </div>
