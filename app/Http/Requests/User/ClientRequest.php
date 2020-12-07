<?php

namespace App\Http\Requests\User;

use Litepie\Http\Request\AbstractRequest;
use App\Models\Client;

class ClientRequest extends AbstractRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->model = $this->route('client');

        if (is_null($this->model)) {
            // Determine if the user is authorized to access client module,
            return $this->user()->can('view', app(Client::class));
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
        if ($this->isStore()) {
            // validation rule for create request.
            return [
                'email' => 'required|email',
                'phone' => 'numeric',
                'mobile' => 'numeric',
            ];
        }

        if ($this->isUpdate()) {
            // Validation rule for update request.
            return [
                'email' => 'required|email',
                'phone' => 'numeric',
                'mobile' => 'numeric',
            ];
        }

        // Default validation rule.
        return [

        ];
    }
}
