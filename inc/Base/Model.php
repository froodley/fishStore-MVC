<?php

namespace fishStore\Base;

/**
 * Model
 *
 * The abstract base class for all data models
 *
 * @package    fishStore
 * @author     Pete Burkindine <pburkind@gmail.com>
 * @copyright  2016
 * @version    Release: 1.3
 */
abstract class Model implements \fishStore\Interfaces\iModel
{
	/*
	 * __construct
	 *
	 * Create the model object, using the data if provided
	 *
	 * @param (var) The data needed to create the model
	 * @return (\fishStore\Base\Model) The model
	 */
	abstract public function __construct( $data = null);

} // Model



