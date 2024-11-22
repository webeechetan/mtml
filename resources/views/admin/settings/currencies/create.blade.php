<form action="{{ route('currencies.store') }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Add New Currency')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Name')}}</label>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" placeholder="{{translate('Name')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Symbol')}}</label>
            <div class="col-md-9">
                <input type="text" name="symbol" class="form-control" placeholder="{{translate('Symbol')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Code')}}</label>
            <div class="col-md-9">
                <input type="text" name="code" class="form-control" placeholder="{{translate('Code')}}" required>
            </div>
        </div>
        {{-- <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Exchange Rate')}}</label>
            <div class="col-md-9">
                <input type="number" name="exchange_rate" step="0.01" min="0" class="form-control" placeholder="{{translate('Exchange Rate')}}" required>
            </div>
        </div> --}}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Add Currency')}}</button>
    </div>
</form>
