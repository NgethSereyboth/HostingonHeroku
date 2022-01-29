<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {

    return $this->get('id') ? $this->updateRules() : 
    $this->storeRules();

  }

  public function storeRules () {

    return [

      'name'     =>  'required|min:10|unique:users, name',
      'email'    =>  'required|email|unique:users,email',

      'role_id'    =>  'required'
                      
    ];
  }

  public function updateRules () {

    return [
      
      'name'     
        =>  'required|min:10|unique:users, name,'.$this->get('id'),
      'email'    
        =>  'required|email|unique:users,email,'.$this->get('id'),

      'role_id'    =>  'required'
                      
    ];
  }
}
