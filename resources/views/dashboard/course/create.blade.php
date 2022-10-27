@extends('dashboard.templates.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Blog</h1>
</div>
    <div class="col-lg-5 mb-5">
        <form method="post" action="/dashboard/course">
          @csrf
            <div class="mb-3">
                {{-- <input type="hidden" value="{{ $course->user->id }}"> --}}
              <label for="date" class="form-label">Date</label>
              <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required autofocus value="{{ old('date') }}">
              @error('date')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="lessons" class="form-label">Lessons</label>
                <input type="text" class="form-control @error('lesson') is-invalid @enderror" id="lessons" name="lessons" required autofocus value="{{ old('lessons') }}">
                @error('lessons')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3 d-flex flex-column">
                <label for="student" class="form-label">Student</label>
                <select name="student" id="student" class="form-select">
                  @foreach ($students as $student)
                      <option value="{{ $student->id }}">{{ $student->name }}</option>
                  @endforeach
                </select>
                @error('student')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

@endsection