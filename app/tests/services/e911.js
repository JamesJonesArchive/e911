'use strict';

describe('Service: e911', function () {
    var e911Service, httpBackend;
    
    // load the service's module
    beforeEach(module('e911App'));

    // instantiate service
    beforeEach(inject(function (_e911Service_, $httpBackend) {
        e911Service = _e911Service_;
        httpBackend = $httpBackend;
    }));
    
    it('testing e911 sigining requests', function () {
        httpBackend.whenPOST("api/e911sign").respond(
            {"e911sign":true}
        );
        e911Service.e911sign('ABCDEFGHIJKLMNOPQRSTUVWXYZ').then(function(response) {
            expect(response.data.e911sign).toEqual(true);
        });
        httpBackend.flush();
    });
});