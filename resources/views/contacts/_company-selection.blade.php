<select class="custom-select" name="company_id" id="search-select" onchange="this.form.submit()">
    <option value="" selected>All Companies</option>
    @foreach($companies as $key => $company)  
      <option value="{{ $key }}" @if($key == request()->query("company_id")) selected @endif>{{ $company }}</option>
    @endforeach
</select>
