<?php

namespace repositories\interface;
interface IProductRepository
{
    public function GetAllProduct();

    public function GetLatestPriceOfTheProduct();

    public function GetProductById($productId);
}