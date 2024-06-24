<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'customer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star,
            // 'stock' => $this->stock == 0 ? 'Out of Stock' : $this->stock,
            // 'discount' => $this->discount,
            // 'totalPrice' =>round((1-($this->discount/100))* $this->price),

            // 'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star') / $this->reviews->count(), 2) : 'No Rating Yet',
            // 'href' => [
            //     'reviews' => route('reviews.index', $this->id)

            // ]
        ];
    }
}