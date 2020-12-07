<?php

namespace App\Http\Requests\User;

use Litepie\Http\Request\AbstractRequest;
use App\Models\User;

class UserRequest extends AbstractRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->model = $this->route('user');
        if (is_null($this->model)) {
            // Determine if the user is authorized to access user module,
            // return $this->formRequest->user()->can('view', User::class);
            return $this->user()->can('view', app(User::class));
        }

        if ($this->isWorkflow()) {
            // Determine if the user is authorized to change status of an entry,
            return $this->can($this->getStatus());
        }

       if ($this->isCreate() || $this->isStore()) {
            // Determine if the user is authorized to create an entry,
            return $this->can('create');
        }

        if ($this->isEdit() || $this->isUpdate()) {
            // Determine if the user is authorized to update an entry,
            return $this->can('update');
        }

        if ($this->isDelete()) {
            // Determine if the user is authorized to delete an entry,
            return $this->can('destroy');
        }
        // Determine if the user is authorized to view the module.
        return $this->can('view');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isCreate()) {
            // validation rule for create request.
            return [
                // 'phone' => 'required|integer',
            ];
        }

        if ($this->isUpdate()) {
            // Validation rule for update request.
            return [
                'email' => 'required|email:rfc,dns',
                'phone' => 'integer',
                'mobile' => 'integer',

            ];
        }

        // Default validation rule.
        return [

        ];
    }
}
