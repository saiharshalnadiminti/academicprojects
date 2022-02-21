/**
 * Name : Saiharshal Nadiminti
 * Section : 301
 * Student No & User ID: 040982223 & nadi0009
 */


/*
 * SpriteFacade.java
 *  SpriteFacade has all the persistance unit attainable in the files 
 *
 */
package CST8218.nadi0009.game;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

/**
 *
 * @author tgk
 */
@Stateless
public class SpriteFacade extends AbstractFacade<Sprite> {
    @PersistenceContext(unitName = "SpriteSaiharshal-ejbPU")
    private EntityManager em;

    @Override
    protected EntityManager getEntityManager() {
        return em;
    }

    public SpriteFacade() {
        super(Sprite.class);
    }
    
}
