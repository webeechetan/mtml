<form action="{{ route('career.update', $career->id) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Edit Career Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Designation')}}</label>
            <div class="col-md-9">
                <input type="text" name="designation" value="{{$career->designation}}" class="form-control" placeholder="{{translate('designation')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Company')}}</label>
            <div class="col-md-9">
                <input type="text" name="company" value="{{$career->company}}"  placeholder="{{ translate('company') }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Start')}}</label>
            <div class="col-md-9">
                <input type="number" name="career_start" value="{{$career->start}}" class="form-control" placeholder="{{translate('Start')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('End')}}</label>
            <div class="col-md-9">
                <input type="number" name="career_end" value="{{$career->end}}"  placeholder="{{ translate('End') }}" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Salary')}}</label>
            <div class="col-md-9">
                <input type="text" name="salary" value="{{$career->salary}}"  placeholder="{{ translate('Salary') }}" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Working With')}}</label>
            <div class="col-md-9">
                <select name="working_with" id="working_with" class="form-control">
                    <option value="{{$career->working_with}}" selected>{{$career->working_with}}</option>
                    <option value="Private Company">Private Company</option>
                    <option value="Govt/Public Sector">Govt/Public Sector</option>
                    <option value="Defence/Civil Servent">Defence/Civil Servent</option>
                    <option value="Business/Self Employes">Business/Self Employes</option>
                    <option value="Not Working">Not Working</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Update Career Info')}}</button>
    </div>
</form>
