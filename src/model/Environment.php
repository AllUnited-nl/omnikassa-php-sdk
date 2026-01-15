<?php

namespace nl\rabobank\gict\payments_savings\omnikassa_sdk\model;

/**
 * This class contains the ROFE API urls per environment.
 */
abstract class Environment
{
    public const PRODUCTION = 'https://api.pay.rabobank.nl/';
    public const SANDBOX = 'https://api.pay-sandbox.rabobank.nl/';
}
