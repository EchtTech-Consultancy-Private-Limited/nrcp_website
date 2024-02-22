<?php
namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;

use App\Models\CMSModels\FormBuilder;
use Illuminate\Http\Request;
use App\Http\Traits\AccessModelTrait;
use Ramsey\Uuid\Uuid;
use DB, Validator;
use Carbon\Carbon;

class FormBuilderController extends Controller
{
    use AccessModelTrait;
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $create = 'form-builder.form-create';
    protected $update = 'form-builder.form-edit';
    protected $show = 'form-builder.form-show';
    protected $list = 'form-builder.form-list';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        if(isset($this->abortIfAccessNotAllowed()['view']) && $this->abortIfAccessNotAllowed()['view'] !=''){
            $crudUrlTemplate['list'] = route('formbuilder-list');
        }
        if(isset($this->abortIfAccessNotAllowed()['update']) && $this->abortIfAccessNotAllowed()['update'] !=''){
            $crudUrlTemplate['edit'] = route('formbuilder.edit', ['id' => 'xxxx']);
        }
        if(isset($this->abortIfAccessNotAllowed()['view']) && $this->abortIfAccessNotAllowed()['view'] !=''){
            $crudUrlTemplate['view'] = route('formbuilder.show', ['id' => 'xxxx']);
        }
        if(isset($this->abortIfAccessNotAllowed()['delete']) && $this->abortIfAccessNotAllowed()['delete'] !=''){
            $crudUrlTemplate['delete'] = route('formbuilder-delete', ['id' => 'xxxx']);
        }
        if(isset($this->abortIfAccessNotAllowed()['approver']) && $this->abortIfAccessNotAllowed()['approver'] !=''){
            $crudUrlTemplate['approver'] = route('formbuilder-approve', ['id' => 'xxxx']);
        }else{
            $crudUrlTemplate['approver'] = '0';
        }
        if(isset($this->abortIfAccessNotAllowed()['publisher']) && $this->abortIfAccessNotAllowed()['publisher'] !=''){
            $crudUrlTemplate['publisher'] = route('formbuilder-approve', ['id' => 'xxxx']);
        }else{
            $crudUrlTemplate['publisher'] = '0';
            
        }

        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.'.$this->list,
            ['crudUrlTemplate' =>  json_encode($crudUrlTemplate)
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crudUrlTemplate = array();
        if(isset($this->abortIfAccessNotAllowed()['create']) && $this->abortIfAccessNotAllowed()['create'] !=''){
            $crudUrlTemplate['create'] = route('formbuilder-save');
        }else{
            $accessPermission = $this->checkAccessMessage();
        }
        return view('cms-view.'.$this->create,
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),    
        'textMessage' =>$accessPermission??''
    
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $crudUrlTemplate = array();
        if(isset($this->abortIfAccessNotAllowed()['view']) && $this->abortIfAccessNotAllowed()['view'] !=''){
            $crudUrlTemplate['show'] = route('formbuilder-show');
            $crudUrlTemplate['save_form_data'] = route('formbuilder-saveformData');
        }
        $results = DB::table('form_designs_management')->where('uid', $request->get('id'))->first()->form_name;
        if($results){
            $result = $results;
        }else{
            abort(404);
        }
       
        return view('cms-view.'.$this->show,
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
            'title' => $results??''
        ]);
    }
    public function saveFormData(Request $request){
        //dd($request->all());
        //$request['form_design_id']=$request->get('id');
        try{
            $validator=Validator::make($request->all(),
                [
                'form_design_id'=>'required',
               // "content"    => "required|array",
              //  "content.*"    => "required",
            ]);
            if($validator->fails())
            {
                $notification = array(
                    'message' => $validator->errors(),
                    'alert-type' => 'error'
                );
            }
            else{
                $request->request->remove('_token');
                $data =new FormBuilder();
                $data->uid = Uuid::uuid4();
                $data->form_design_id = $request->form_design_id;
                $request->request->remove('form_design_id');
                $data->content = json_encode($request->all());
                
            if($data->save())
            {
                $notification = array(
                    'message' => 'Added Successfully',
                    'alert-type' => 'success'
                );
            }
            else{
                $notification = array(
                    'message' => 'some error accoured.',
                    'alert-type' => 'error'
                );
            }
            }
           }catch(Throwable $e){report($e);
            return false;
           }
           
        return redirect()->back()->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder)
    {
        $crudUrlTemplate = array();
        if(isset($this->abortIfAccessNotAllowed()['update']) && $this->abortIfAccessNotAllowed()['update'] !=''){
            $crudUrlTemplate['update'] = route('formbuilder-update');
            $crudUrlTemplate['editForm'] = route('formbuilder-edit');
        }

        // $results = DB::table('form_designs_management')->where('uid', $request->id)->first();
        // if($results){
        //     $result = $results;
        // }else{
        //     abort(404);
        // }
        //dd($result);
        return view('cms-view.'.$this->update,
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
           // 'data'=> $result,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormBuilder $formBuilder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormBuilder  $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormBuilder $formBuilder)
    {
        //
    }
}
