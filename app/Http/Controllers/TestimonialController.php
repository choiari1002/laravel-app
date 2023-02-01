<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;

class TestimonialController extends Controller
{
    // 전체조회
    public function index()
    {
        $testimonials = Testimonial::latest('id')->paginate(50);

        return view('dashboard.testimonials.index')
            ->with('testimonials', $testimonials);
    }

    // 생성 -> 눌리면 생성뷰로 이동하기
    // public function create()
    // {
    //     $questions = Question::active()->sort()->get();

    //     return view('dashboard.mentors.create')
    //         ->with('questions', $questions);
    // }
    public function create()
    {
        return view('dashboard.testimonials.create');
    }

    // 저장
    public function store(MentorRequest $request)
    {
        $request->merge([
            'order' => Testimonial::count() + 1,
            'is_active' => isset($request->is_active) ? true : false
        ]);

        $testimonials = Testimonial::create( $request->all() );

        if( isset($request->photo) ) {
            $this->update_answers_for_questions($mentor, $request);
        }

        Session::flash('success', 'Successfully created');
        return redirect('dashboard/testimonials');
    }

    // 수정(업데이트)
    public function edit($slug)
    {
        $questions = $this->get_questions();

        $mentor = Mentor::with('questions')
                        ->where('slug', $slug)
                        ->firstOrFail();

        #TODO: can I just use an array_map for this?
        $answers = [];
        foreach($mentor->questions as $answer) {
            $answers[$answer['question_id']] = $answer['answer'];
        }

        return view('dashboard.mentors.edit')
            ->with('questions', $questions)
            ->with('answers', $answers)
            ->with('mentor', $mentor);
    }

    // 업데이트
    public function update(TestimonialRequest $request, $slug)
    {
        $mentor = Mentor::where('slug', $slug)->firstOrFail();

        $request->merge(['is_active' => isset($request->is_active) ? true : false]);

        $mentor->update( $request->all() );

        $this->update_answers_for_questions($mentor, $request);

        if( isset($request->photo) ) {
            $this->upload_photo($mentor, $request);
        }

        Session::flash('success', 'Successfully updated');

        return redirect('dashboard/mentors');
    }

    // 삭제
    public function delete($slug)
    {
        $testimonials = Testimonial::where('slug', $slug)->delete();

        Session::flash('success', 'Successfully removed');

        return redirect('dashboard/testimonials');
    }

    // 섬네일 업로드 (TODO: this can be refactored at some point)
    private function upload_thumbnail($testimonial, $request)
    {
        $image_name = $request->slug . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('images/uploads/testimonials'), $image_name);
        $testimonial->update(['thumbnail' => $image_name]);
    }
}
