JWT + Symfony
=============

Goal: Use `LexikJWTAuthenticationBundle`_ and research JWT ( Json Web Token )

.. _LexikJWTAuthenticationBundle: https://github.com/lexik/LexikJWTAuthenticationBundle


Steps
-----

Install project
+++++++++++++++

.. code-block:: console

    composer install

Try to acces proteced endpoint
++++++++++++++++++++++++++++++

.. code-block:: console
    
    curl -H "Content-Type: application/json" http://localhost/api/hello


Login with dummy user, get JWT in response
+++++++++++++++++++++++++++++++++++++++++++

.. code-block:: console

    # username in password are defined in config/security.yaml
    # also, the "api/login_check" is defined there; there is no controller explicit contoller or action--at least none that I could find

    curl -X POST -H "Content-Type: application/json" http://localhost/api/login_check -d '{"username":"lexik","password":"dummy"}'


Use token to access protected endpoint
++++++++++++++++++++++++++++++++++++++

.. code-block:: console

    export TOKEN=<token>
    
    curl -H "Content-Type: application/json" http://localhost/api/hello?bearer=$TOKEN


Decode JWT (optional)
+++++++++++++++++++++

Go to https://jwt.io 

You can read the content of the token, it could be something link:

.. 

.. note::

This demonstrates that by default JWT's are only signed but not encrypted !


Full working example
---------------------

.. note::

    I didn't test this, just had a look at it when I was still stuck with the docs of the bundle

`LexikJWTAuthenticationBundle Sandbox <https://github.com/chalasr/lexik-jwt-authentication-sandbox>`_

