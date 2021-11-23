<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Aluno extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'curso' => $this->curso,
            'semestre' => $this->semestre,
            'ra' => $this->ra,
            'cpf' => $this->cpf,
            'cidade' => $this->cidade,
        ];
    }
}
