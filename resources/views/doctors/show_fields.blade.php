<div class="col-md-6 mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor.specialization')  }}</label>
    <br>
    @foreach($doctorDetailData['data']->specializations as $specialization)
        <span class="badge my-1 me-1 bg-{{ getBadgeColor($loop->index) }}">{{ $specialization->name }}</span>
    @endforeach
</div>
 
<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor.dob')  }}</label>
    <span class="fs-4 text-gray-800">{{ !empty($doctorDetailData['data']->user->dob) ? \Carbon\Carbon::parse($doctorDetailData['data']->user->dob)->isoFormat('DD MMM YYYY') : __('messages.common.n/a') }}</span>
</div>



<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor.experience')  }}</label>
    <span class="fs-4 text-gray-800">{{ !empty($doctorDetailData['data']->experience) ? $doctorDetailData['data']->experience : __('messages.common.n/a') }}</span>
</div>
<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">{{ __('messages.setting.address')  }}</label>
    <span class="fs-4 text-gray-800">{{ !empty($doctorDetailData['data']->user->address->address1) ? $doctorDetailData['data']->user->address->address1 : __('messages.common.n/a') }}</span>
</div>

<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">Longitude</label>
    <span class="fs-4 text-gray-800">{{ !empty($doctorDetailData['data']->longitude) ? $doctorDetailData['data']->longitude : __('messages.common.n/a') }}</span>
</div>
<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">Latitude</label>
    <span class="fs-4 text-gray-800">{{ !empty($doctorDetailData['data']->latitude) ? $doctorDetailData['data']->latitude : __('messages.common.n/a') }}</span>
</div>

<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">{{ __('messages.patient.registered_on')  }}</label>
    <span class="fs-4 text-gray-800">{{$doctorDetailData['data']->user->created_at->diffForHumans()}}</span>
</div>
<div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
    <label class="pb-2 fs-4 text-gray-600">{{ __('messages.patient.last_updated')  }}</label>
    <span class="fs-4 text-gray-800">{{$doctorDetailData['data']->user->updated_at->diffForHumans()}}</span>
</div>


<div class="col-md-6">
    <div class="mb-5">
        {{ Form::label('map', __('Location Map') . ':', ['class' => 'form-label']) }}
        <iframe 
            id="locationMap"
            src="https://www.google.com/maps?q={{ $doctorDetailData['data']->latitude }},{{ $doctorDetailData['data']->longitude }}&hl=es;z=14&output=embed"
            width="100%" 
            height="300" 
            frameborder="0" 
            style="border:0;" 
            allowfullscreen="" 
            aria-hidden="false" 
            tabindex="0">
        </iframe>
    </div>
</div>


