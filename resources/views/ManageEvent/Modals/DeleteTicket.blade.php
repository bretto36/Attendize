<div role="dialog" class="modal fade" style="display: none;">
    {!! Form::model($ticket, ['url' => route('postDeleteTicket', ['ticket_id' => $ticket->id, 'event_id' => $event->id]), 'class' => 'ajax']) !!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class="modal-title">
                        <i class="ico-ticket"></i> Delete Ticket: <em>{{$ticket->title}}</em>
                    </h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you would like to delete this ticket?</p>
                </div>
                <!-- /end modal body-->
                <div class="modal-footer">
                    {!! Form::button('Close', ['class'=>"btn modal-close btn-danger",'data-dismiss'=>'modal']) !!}
                    {!! Form::submit('Delete Ticket', ['class'=>"btn btn-success"]) !!}
                </div>
            </div>
            <!-- /end modal content-->
        </div>
    {!! Form::close() !!}
</div>
