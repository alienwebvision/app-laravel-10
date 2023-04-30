<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    )
    {
    }

    public function index(Request $request)
    {

        $supports = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 15),
            filter: $request->filter,
        );
//        $supports = Support::paginate(3);

//        dd($supports);
//        Laravel protege ataque XSS
//        $xss = '<script>alert("HACKEANDO");</script>';

//        dd($supports);
        return view('admin.supports.index', compact('supports'));
    }

    public function show(string $id)
    {
//            dd($id);
//            Support::find($id)
//            Support::where('id', $id)->first();
//            Support::where('id','!=' $id)->first();
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
//        dd($support->subject);

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupportRequest $request, Support $support)
    {
//        todos os dados
//        dd($request->all());
        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );
//        dd($support);
        return redirect()->route('supports.index');
    }

    public function edit(string $id)
    {
//        if (!$support = $support->where('id', $id)->first()) {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupportRequest $request, Support $support, string $id)
    {
        $support = $this->service->new(
            UpdateSupportDTO::makeFromRequest($request)
        );

        if (!$support) {
            return back();
        }
//Alternativa mas muito mais verbosa...
//        $support->subject = $request->subject;
//        $support->body = $request->body;
//        $support->save();

//            $support->update($request->only([
//            'subject',
//            'body'
//        ]));

        return redirect()->route('supports.index');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}
