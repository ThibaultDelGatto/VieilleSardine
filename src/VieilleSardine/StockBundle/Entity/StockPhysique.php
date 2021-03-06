<?php

namespace VieilleSardine\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockPhysique
 *
 * @ORM\Table(name="stock_physique")
 * @ORM\Entity(repositoryClass="VieilleSardine\StockBundle\Entity\StockPhysiqueRepository")
 */
class StockPhysique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStock;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_disponible", type="integer", nullable=false)
     */
    private $stockDisponible;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_reserve", type="integer", nullable=false)
     */
    private $stockReserve;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     */
    private $idProduit;



    /**
     * Get idStock
     *
     * @return integer 
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * Set stockDisponible
     *
     * @param integer $stockDisponible
     * @return StockPhysique
     */
    public function setStockDisponible($stockDisponible)
    {
        $this->stockDisponible = $stockDisponible;
    
        return $this;
    }

    /**
     * Get stockDisponible
     *
     * @return integer 
     */
    public function getStockDisponible()
    {
        return $this->stockDisponible;
    }

    /**
     * Set stockReserve
     *
     * @param integer $stockReserve
     * @return StockPhysique
     */
    public function setStockReserve($stockReserve)
    {
        $this->stockReserve = $stockReserve;
    
        return $this;
    }

    /**
     * Get stockReserve
     *
     * @return integer 
     */
    public function getStockReserve()
    {
        return $this->stockReserve;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     * @return StockPhysique
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    
        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}